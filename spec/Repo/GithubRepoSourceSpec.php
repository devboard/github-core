<?php

namespace spec\DevBoardLib\GithubCore\Repo;

use DevBoardLib\GithubCore\Repo\GithubRepo;
use DevBoardLib\GithubCore\Repo\GithubRepoCreatedAt;
use DevBoardLib\GithubCore\Repo\GithubRepoFullName;
use DevBoardLib\GithubCore\Repo\GithubRepoGitUrl;
use DevBoardLib\GithubCore\Repo\GithubRepoId;
use DevBoardLib\GithubCore\Repo\GithubRepoName;
use DevBoardLib\GithubCore\Repo\GithubRepoOwner;
use DevBoardLib\GithubCore\Repo\GithubRepoPermissions;
use DevBoardLib\GithubCore\Repo\GithubRepoPushedAt;
use DevBoardLib\GithubCore\Repo\GithubRepoSshUrl;
use DevBoardLib\GithubCore\Repo\GithubRepoUpdatedAt;
use DevBoardLib\GithubCore\User\GithubUserId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GithubRepoSourceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('DevBoardLib\GithubCore\Repo\GithubRepoSource');
        $this->shouldHaveType(GithubRepo::class);
    }

    public function let(
        GithubRepoId $id,
        GithubRepoOwner $owner,
        GithubRepoName $name,
        GithubRepoFullName $fullName,
        GithubRepoGitUrl $gitUrl,
        GithubRepoSshUrl $sshUrl,
        GithubRepoPermissions $permissions,
        GithubRepoCreatedAt $githubCreatedAt,
        GithubRepoUpdatedAt $githubUpdatedAt,
        GithubRepoPushedAt $githubPushedAt,
        GithubUserId $ownerId
    ) {
        $owner->getGithubUserId()->willReturn($ownerId);
        $permissions->isAdmin()->willReturn(false);
        $permissions->isPushAllowed()->willReturn(false);
        $permissions->isReadAllowed()->willReturn(false);

        $this->beConstructedWith(
            $id,
            $owner,
            $name,
            $fullName,
            $htmlUrl = 'http://...',
            $description = 'Library description',
            $fork = false,
            $defaultBranchName = 'master',
            $githubPrivate = false,
            $gitUrl,
            $sshUrl,
            $permissions,
            $githubCreatedAt,
            $githubUpdatedAt,
            $githubPushedAt
        );
    }

    public function it_exposes_all_constructor_params_via_getters(
        $id,
        $owner,
        $name,
        $fullName,
        $gitUrl,
        $sshUrl,
        $githubCreatedAt,
        $githubUpdatedAt,
        $githubPushedAt,
        GithubUserId $ownerId
    ) {
        $owner->getGithubUserId()->willReturn($ownerId);

        $this->getId()->shouldReturn($id);
        $this->getOwner()->shouldReturn($owner);
        $this->getName()->shouldReturn($name);
        $this->getFullName()->shouldReturn($fullName);
        $this->getHtmlUrl()->shouldReturn('http://...');
        $this->getDescription()->shouldReturn('Library description');
        $this->isFork()->shouldReturn(false);
        $this->getDefaultBranchName()->shouldReturn('master');
        $this->isPrivate()->shouldReturn(false);
        $this->getGitUrl()->shouldReturn($gitUrl);
        $this->getSshUrl()->shouldReturn($sshUrl);
        $this->getGithubCreatedAt()->shouldReturn($githubCreatedAt);
        $this->getGithubUpdatedAt()->shouldReturn($githubUpdatedAt);
        $this->getGithubPushedAt()->shouldReturn($githubPushedAt);

        $this->getOwnerUserId()->shouldReturn($ownerId);
    }

    public function it_will_expose_permissions()
    {
        $this->isAdmin()->shouldReturn(false);
        $this->isPushAllowed()->shouldReturn(false);
        $this->isReadAllowed()->shouldReturn(false);
    }
}
